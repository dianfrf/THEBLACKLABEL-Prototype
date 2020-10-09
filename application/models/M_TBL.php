<?php    
    defined('BASEPATH') OR exit('No direct script access allowed');   
    class M_TBL extends CI_Model {
        public function getlatestalbum()
        {
            return $this->db->query("SELECT * FROM albums ORDER BY release_date DESC LIMIT 1")->row();
        }

        public function getlatestvideo()
        {
            return $this->db->query("SELECT * FROM video
            INNER JOIN albums ON video.id_album=albums.id_album
            INNER JOIN artists ON albums.id_artist=artists.id_artist ORDER BY video_release_date DESC LIMIT 1")->row();
        }

        public function getartists()
        {
            return $this->db->query("SELECT * FROM artists ORDER BY id_artist ASC")->result();
        }

        public function getartistbyid($id)
        {
            return $this->db->query("SELECT * FROM artists WHERE id_artist=$id")->row();
        }

        public function getlastartistid()
        {
            return $this->db->query("SELECT * FROM artists ORDER BY id_artist DESC LIMIT 1")->row();
        }

        public function countawards($id)
        {
            return $this->db->query("SELECT * FROM penghargaan WHERE id_artist=$id")->num_rows();
        }

        public function getawards($id)
        {
            return $this->db->query("SELECT * FROM penghargaan WHERE id_artist=$id ORDER BY id_penghargaan DESC")->result();
        }

        public function countfilms($id)
        {
            return $this->db->query("SELECT * FROM filmografi WHERE id_artist=$id")->num_rows();
        }

        public function getfilms($id)
        {
            return $this->db->query("SELECT * FROM filmografi WHERE id_artist=$id ORDER BY id_filmografi DESC")->result();
        }

        public function countartistalbums($id)
        {
            return $this->db->query("SELECT * FROM albums WHERE id_artist=$id")->num_rows();
        }

        public function getartistalbums($limit,$start,$id)
        {
            return $this->db->query("SELECT * FROM albums WHERE id_artist=$id ORDER BY id_album DESC LIMIT $limit OFFSET $start")->result();
        }

        public function getalbumbyid($id,$ord)
        {
            return $this->db->query("SELECT * FROM albums 
            INNER JOIN artists ON albums.id_artist=artists.id_artist WHERE album_order=$ord AND albums.id_artist=$id")->row();
        }

        public function getlastalbumid($id)
        {
            return $this->db->query("SELECT * FROM albums WHERE id_artist=$id ORDER BY album_order DESC LIMIT 1")->row();
        }

        public function getalbumtrack($id_album)
        {
            return $this->db->query("SELECT * FROM songs WHERE id_album=$id_album ORDER BY tracknumber ASC")->result();
        }

        public function countalbumvideo($id_album)
        {
            return $this->db->query("SELECT * FROM video WHERE id_album=$id_album")->num_rows();
        }

        public function getalbumvideo($id_album)
        {
            return $this->db->query("SELECT * FROM video WHERE id_album=$id_album ORDER BY video_release_date ASC")->result();
        }

        public function countvideo()
        {
            return $this->db->query("SELECT * FROM video")->num_rows();
        }

        public function getvideo($mulai)
        {
            return $this->db->query("SELECT * FROM video 
            INNER JOIN albums ON video.id_album=albums.id_album
            INNER JOIN artists ON albums.id_artist=artists.id_artist ORDER BY video_release_date DESC LIMIT $mulai, 8")->result();
        }
    }
?>