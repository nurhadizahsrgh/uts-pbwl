<?php

namespace App;

class Post extends Koneksi {

    public function __construct()
    {
        parent::__construct();
    }

    public function tampil()
    {
        $sql = "SELECT  post.*, category.* FROM post, category WHERE post.post_cat_id=category.cat_id";
		$stmt = $this->db->prepare($sql);
		$stmt->execute();

		$data = [];
		while ($rows = $stmt->fetch()) {
			$data[] = $rows;
		}

		return $data;
    }

    public function input()
	{
		$i_post_date = $_POST['i_post_date'];
		$i_slug = $_POST['i_slug'];
		$i_post_title = $_POST['i_post_title'];
        $i_text_post = $_POST['i_text_post'];
        $i_post_cat_id = $_POST['i_post_cat_id'];

		$sql = "INSERT INTO post VALUES (NULL, :post_date, :slug, :post_title, :text_post, :post_cat_id)";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":post_date", $i_post_date);
		$stmt->bindParam(":slug", $i_slug);
		$stmt->bindParam(":post_title", $i_post_title);
        $stmt->bindParam(":text_post", $i_text_post);
        $stmt->bindParam(":post_cat_id", $i_post_cat_id);
		$stmt->execute();
	}

	public function edit($id)
	{
		$sql = "SELECT * FROM post WHERE post_id=:post_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":post_id", $id);
		$stmt->execute();

		$row = $stmt->fetch();

		return $row;
	}

	public function update()
	{
		$i_post_date = $_POST['i_post_date'];
		$i_slug = $_POST['i_slug'];
		$i_post_title = $_POST['i_post_title'];
        $i_text_post = $_POST['i_text_post'];
        $i_post_cat_id = $_POST['i_post_cat_id'];
		$sql = "UPDATE post.*, category. SET post_date=:post_date, :slug=:slug, :post_title=:post_title, :text_post=:text_post, :post_cat_id=:post_cat_id WHERE post.post_cat_id=category.cat_id";

		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":post_date", $i_post_date);
		$stmt->bindParam(":slug", $i_slug);
		$stmt->bindParam(":post_title", $i_post_title);
        $stmt->bindParam(":text_post", $i_text_post);
        $stmt->bindParam(":post_cat_id", $i_post_cat_id);
		$stmt->bindParam(":post_id", $i_post_id);
		$stmt->execute();
	}
}