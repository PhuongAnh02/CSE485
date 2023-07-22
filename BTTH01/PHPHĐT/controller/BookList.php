<?php
include_once 'Book.php';

class BookList {
    private $books = [];

    public function addBook(Book $book) {
        $this->books[] = $book;
    }

    public function getAllBooks() {
        return $this->books;
    }

    // Hàm sắp xếp danh sách sách theo tên tác giả
    public function sortByAuthor() {
        usort($this->books, function ($a, $b) {
            return strcmp($a->getAuthor(), $b->getAuthor());
        });
    }

    // Hàm sắp xếp danh sách sách theo tên sách
    public function sortByTitle() {
        usort($this->books, function ($a, $b) {
            return strcmp($a->getTitle(), $b->getTitle());
        });
    }

    // Hàm sắp xếp danh sách sách theo năm xuất bản
    public function sortByPublishYear() {
        usort($this->books, function ($a, $b) {
            return $a->getPublishYear() - $b->getPublishYear();
        });
    }
}
?>
