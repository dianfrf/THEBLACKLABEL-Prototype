<?php    
    defined('BASEPATH') OR exit('No direct script access allowed');   
    class M_TBL extends CI_Model {
        public function getlatestalbum()
        {
            return $this->db->order_by('release_date','DESC')->limit(1)->get('albums')->row();
        }

        public function getlatestvideo()
        {
            return $this->db->join('albums','videos.id_album=albums.id_album')
                            ->join('artists','albums.id_artist=artists.id_artist')
                            ->order_by('video_release_date','DESC')->limit(1)->get('videos')->row();
        }

        public function getartists()
        {
            return $this->db->order_by('id_artist','ASC')->get('artists')->result();
        }

        public function getartistbyid($id)
        {
            return $this->db->where('id_artist',$id)->get('artists')->row();
        }

        public function getlastartistid()
        {
            return $this->db->order_by('id_artist','DESC')->limit(1)->get('artists')->row();
        }

        public function countawards($id)
        {
            return $this->db->where('id_artist',$id)->get('awards')->num_rows();
        }

        public function getawards($id)
        {
            return $this->db->order_by('year','DESC')->where('id_artist',$id)->get('awards')->result();
        }

        public function countfilms($id)
        {
            return $this->db->where('id_artist',$id)->get('filmography')->num_rows();
        }

        public function getfilms($id)
        {
            return $this->db->order_by('year','DESC')->where('id_artist',$id)->get('filmography')->result();
        }

        public function countartistalbums($id)
        {
            return $this->db->where('id_artist',$id)->get('albums')->num_rows();
        }

        public function getartistalbums($limit,$start,$id)
        {
            return $this->db->order_by('release_date','DESC')->limit($limit,$start)->where('id_artist',$id)->get('albums')->result();
        }

        public function getalbumbyid($id,$ord)
        {
            return $this->db->join('artists','albums.id_artist=artists.id_artist')
                            ->where('album_order',$ord)->where('albums.id_artist',$id)->get('albums')->row();
        }

        public function getlastalbumid($id)
        {
            return $this->db->order_by('album_order','DESC')->limit(1)->where('id_artist',$id)->get('albums')->row();
        }

        public function getalbumtrack($id_album)
        {
            return $this->db->order_by('tracknumber','ASC')->where('id_album',$id_album)->get('songs')->result();
        }

        public function countalbumvideo($id_album)
        {
            return $this->db->where('id_album',$id_album)->get('videos')->num_rows();
        }

        public function getalbumvideo($id_album)
        {
            return $this->db->order_by('video_release_date','DESC')->where('id_album',$id_album)->get('videos')->result();
        }

        public function countvideo()
        {
            return $this->db->get('videos')->num_rows();
        }

        public function getvideo($mulai)
        {
            return $this->db->join('albums','videos.id_album=albums.id_album')
                            ->join('artists','albums.id_artist=artists.id_artist')
                            ->order_by('video_release_date','DESC')->limit(8,$mulai)->get('videos')->result();
        }
    }
?>