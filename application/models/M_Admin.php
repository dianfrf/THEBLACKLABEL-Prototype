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

        public function do_film_add($id_artist,$film_title,$year)
        {
            $object = array (
                'id_artist'   => $id_artist,
                'film_title'  => $film_title,
                'year'        => $year
            );
            $this->db->insert('filmography', $object);
            if ($this->db->affected_rows()>0) {
                return TRUE;
            }
            else {
                return FALSE;
            }
        }

        public function do_award_add($id_artist,$nomination,$year)
        {
            $object = array (
                'id_artist'   => $id_artist,
                'nomination'  => $nomination,
                'year'        => $year
            );
            $this->db->insert('awards', $object);
            if ($this->db->affected_rows()>0) {
                return TRUE;
            }
            else {
                return FALSE;
            }
        }

        public function do_video_add($filename,$id_album,$video_name,$video_release_date,$link)
        {
            $object = array (
                'id_album'              => $id_album,
                'video_name'            => $video_name,
                'video_release_date'    => $video_release_date,
                'link'                  => $link,
                'thumbnail'             => $filename
            );
            $this->db->insert('videos', $object);
            if ($this->db->affected_rows()>0) {
                return TRUE;
            }
            else {
                return FALSE;
            }
        }

        public function do_song_add($id_album,$title,$duration,$tracknumber,$is_title,$lyricsby,$composedby,$arrangedby)
        {
            $object = array (
                'id_album'          => $id_album,
                'title'             => $title,
                'duration'          => $duration,
                'tracknumber'       => $tracknumber,
                'is_title'          => $is_title,
                'lyricsby'          => $lyricsby,
                'composedby'        => $composedby,
                'arrangedby'        => $arrangedby
            );
            $this->db->insert('songs', $object);
            if ($this->db->affected_rows()>0) {
                return TRUE;
            }
            else {
                return FALSE;
            }
        }

        public function do_album_add($filename,$id_artist,$album_name,$album_desc,$album_ord,$release_date,$itunes,$spotify,$melon,$genie,$bugs,$flo,$vibe)
        {
            $object = array (
                'id_artist'             => $id_artist,
                'album_name'            => $album_name,
                'release_date'          => $release_date,
                'album_description'     => $album_desc,
                'cover'                 => $filename,
                'itunes'                => $itunes,
                'spotify'               => $spotify,
                'melon'                 => $melon,
                'genie'                 => $genie,
                'bugs'                  => $bugs,
                'flo'                   => $flo,
                'vibe'                  => $vibe,
                'album_order'           => $album_ord
            );
            $this->db->insert('albums', $object);
            if ($this->db->affected_rows()>0) {
                return TRUE;
            }
            else {
                return FALSE;
            }
        }

        public function do_artist_add($filename,$name,$description,$instagram,$facebook,$twitter,$soundcloud,$commercial)
        {
            $object = array (
                'name'          => $name,
                'description'   => $description,
                'picture'       => $filename,
                'instagram'     => $instagram,
                'facebook'      => $facebook,
                'twitter'       => $twitter,
                'soundcloud'    => $soundcloud,
                'commercial'    => $commercial
            );
            $this->db->insert('artists', $object);
            if ($this->db->affected_rows()>0) {
                return TRUE;
            }
            else {
                return FALSE;
            }
        }
    }
?>