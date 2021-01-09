<?php     
    defined('BASEPATH') OR exit('No direct script access allowed');
    class M_Admin extends CI_Model {
        public function get_artistsdata()
        {
            return $this->db->order_by('id_artist','ASC')->get('artists')->result();
        }

        public function count_artistsdata()
        {
            return $this->db->get('artists')->num_rows();
        }

        public function get_albumsdata()
        {
            return $this->db->join('artists','albums.id_artist=artists.id_artist')
                            ->order_by('release_date','DESC')->get('albums')->result();
        }

        public function count_albumsdata()
        {
            return $this->db->get('albums')->num_rows();
        }

        public function get_songsdata()
        {
            return $this->db->join('albums','songs.id_album=albums.id_album')
                            ->order_by('id_song','ASC')->get('songs')->result();
        }

        public function count_songsdata()
        {
            return $this->db->get('songs')->num_rows();
        }

        public function get_videosdata()
        {
            return $this->db->join('albums','videos.id_album=albums.id_album')
                            ->order_by('video_release_date','DESC')->get('videos')->result();
        }

        public function count_videosdata()
        {
            return $this->db->get('videos')->num_rows();
        }

        public function get_awardsdata()
        {
            return $this->db->join('artists','awards.id_artist=artists.id_artist')
                            ->order_by('year','DESC')->get('awards')->result();
        }

        public function count_awardsdata()
        {
            return $this->db->get('awards')->num_rows();
        }

        public function get_filmsdata()
        {
            return $this->db->join('artists','filmography.id_artist=artists.id_artist')
                            ->order_by('year','DESC')->get('filmography')->result();
        }

        public function count_filmsdata()
        {
            return $this->db->get('filmography')->num_rows();
        }
        
    }
?>