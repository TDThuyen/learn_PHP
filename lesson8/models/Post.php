<?php
class Post
{
    public static function all()
    {
        return [
            (object)['id' => 1, 'title' => 'Giới thiệu về toán', 'content' => 'toán là ...'],
            (object)['id' => 2, 'title' => 'OOP', 'content' => 'OOP là ...']
        ];
    }
}