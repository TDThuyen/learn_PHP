<?php
try {
    $pdo = new PDO('sqlite::memory:');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //chế độ báo lỗi của PDO

    $pdo->exec("CREATE TABLE accounts (
        id INTEGER PRIMARY KEY,
        name TEXT,
        balance DECIMAL(10, 2)
    )");

    $pdo->exec("INSERT INTO accounts (id, name, balance) VALUES (1, 'Tài khoản A', 1000.00)");
    $pdo->exec("INSERT INTO accounts (id, name, balance) VALUES (2, 'Tài khoản B', 500.00)");

    echo "Tạo CSDL thành công!<br>";
} catch (PDOException $e) {
    die("Lỗi thiết lập CSDL: " . $e->getMessage());
}


function transferMoney($pdo, $fromId, $toId, $amount)
{
    try {
        if ($amount <= 0) {
            throw new InvalidArgumentException("Số tiền được chuyển phải >0.");
        }

        $pdo->beginTransaction();
        try {
            $stmt = $pdo->prepare("SELECT balance FROM accounts WHERE id = ?");
            $stmt->execute([$fromId]);
            $senderBalance = $stmt->fetchColumn();

            if ($senderBalance < $amount) {
                throw new Exception("Số dư không đủ thực hiện giao dịch.");
            }
            echo "Số dư đủ, tiếp tục chuyển tiền<br>";
        } catch (Exception $e) {
            throw $e;
        }

        // Trừ tiền tài khoản người gửi
        $stmt = $pdo->prepare("UPDATE accounts SET balance = balance - ? WHERE id = ?");
        $stmt->execute([$amount, $fromId]);
        echo "Đã trừ tiền từ TK $fromId.<br>";


        // Cộng tiền tài khoản người nhận
        $stmt = $pdo->prepare("UPDATE accounts SET balance = balance + ? WHERE id = ?");
        $stmt->execute([$amount, $toId]);
        echo "Đã cộng tiền vào TK $toId.<br>";

        $pdo->commit();
        echo "Giao dịch thành công! Đã commit.<br>";
    } catch (Exception $e) {
        echo "<font color='red'>GẶP LỖI: " . $e->getMessage() . "</font><br>";
        if ($pdo->inTransaction()) {
            $pdo->rollBack();
            echo "<font color='red'>Đã ROLLBACK toàn bộ giao dịch.</font><br>";
        }
    } finally {
        echo "kết thúc tiến trình chuyển tiền.<br>";
    }
}

//Giao dịch thành công
transferMoney($pdo, 1, 2, 200);
echo "<hr>";

//Giao dịch thất bại
transferMoney($pdo, 2, 1, 800);
echo "<hr>";

// input không hợp lệ
transferMoney($pdo, 1, 2, -50);
echo "<hr>";

echo "Số dư cuối cùng:<br>";
$stmt = $pdo->query("SELECT name, balance FROM accounts");
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo $row['name'] . ": " . $row['balance'] . "<br>";
}
