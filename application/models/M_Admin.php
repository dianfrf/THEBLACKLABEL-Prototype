<?php     
    defined('BASEPATH') OR exit('No direct script access allowed');
    class M_Admin extends CI_Model {
        public function do_admin_login($username,$password)
        {
            return $this->db->where('username', $username)->where('password', $password)->get('admin');
        }
//GET AND COUNT ALL DATA
        public function get_artistsdata()
        {
            return $this->db->order_by('id_artist','ASC')->get('artists')->result();
        }
        public function get_artistsdatal()
        {
            return $this->db->order_by('id_artist','ASC')->limit(3)->get('artists')->result();
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
        public function get_albumsdatal()
        {
            return $this->db->join('artists','albums.id_artist=artists.id_artist')
                            ->order_by('release_date','DESC')->limit(3)->get('albums')->result();
        }
        public function count_albumsdata()
        {
            return $this->db->get('albums')->num_rows();
        }
        public function get_songsdata()
        {
            return $this->db->join('albums','songs.id_album=albums.id_album')
                            ->order_by('id_song','DESC')->get('songs')->result();
        }
        public function get_songsdatal()
        {
            return $this->db->join('albums','songs.id_album=albums.id_album')
                            ->order_by('id_song','DESC')->limit(3)->get('songs')->result();
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
        public function get_videosdatal()
        {
            return $this->db->join('albums','videos.id_album=albums.id_album')
                            ->order_by('video_release_date','DESC')->limit(3)->get('videos')->result();
        }
        public function count_videosdata()
        {
            return $this->db->get('videos')->num_rows();
        }
        public function get_filmsdata()
        {
            return $this->db->join('artists','filmography.id_artist=artists.id_artist')
                            ->order_by('year','DESC')->get('filmography')->result();
        }
        public function get_filmsdatal()
        {
            return $this->db->join('artists','filmography.id_artist=artists.id_artist')
                            ->order_by('year','DESC')->limit(3)->get('filmography')->result();
        }
        public function count_filmsdata()
        {
            return $this->db->get('filmography')->num_rows();
        }
        public function get_awardsdata()
        {
            return $this->db->join('artists','awards.id_artist=artists.id_artist')
                            ->order_by('year','DESC')->get('awards')->result();
        }
        public function get_awardsdatal()
        {
            return $this->db->join('artists','awards.id_artist=artists.id_artist')
                            ->order_by('year','DESC')->limit(3)->get('awards')->result();
        }
        public function count_awardsdata()
        {
            return $this->db->get('awards')->num_rows();
        }


//CREATE DATA
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


//DELETE DATA
        public function do_award_delete($id)
        {
            return $this->db->where('id_award', $id)->delete('awards');
        }
        public function do_film_delete($id)
        {
            return $this->db->where('id_filmography', $id)->delete('filmography');
        }
        public function do_video_delete($id)
        {
            return $this->db->where('id_video', $id)->delete('videos');
        }
        public function do_song_delete($id)
        {
            return $this->db->where('id_song', $id)->delete('songs');
        }
        public function do_album_delete($id)
        {
            return $this->db->where('id_album', $id)->delete('albums');
        }
        public function do_artist_delete($id)
        {
            return $this->db->where('id_artist', $id)->delete('artists');
        }


//GET DATA BY ID
        public function do_get_award_id($id)
        {
            return $this->db->where('id_award', $id)->get('awards')->row();
        }
        public function do_get_film_id($id)
        {
            return $this->db->where('id_filmography', $id)->get('filmography')->row();
        }
        public function do_get_video_id($id)
        {
            return $this->db->where('id_video', $id)->get('videos')->row();
        }
        public function do_get_song_id($id)
        {
            return $this->db->where('id_song', $id)->get('songs')->row();
        }
        public function do_get_album_id($id)
        {
            return $this->db->where('id_album', $id)->get('albums')->row();
        }
        public function do_get_artist_id($id)
        {
            return $this->db->where('id_artist', $id)->get('artists')->row();
        }


//EDIT DATA
        public function do_award_edit($id_artist,$nomination,$year,$id_award)
        {
            $object = array (
                'id_artist'   => $id_artist,
                'nomination'  => $nomination,
                'year'        => $year
            );
            return $this->db->where('id_award', $id_award)->update('awards', $object);
        }
        public function do_film_edit($id_artist,$film_title,$year,$id_film)
        {
            $object = array (
                'id_artist'   => $id_artist,
                'film_title'  => $film_title,
                'year'        => $year
            );
            return $this->db->where('id_filmography', $id_film)->update('filmography', $object);
        }
        public function do_song_edit($id_album,$title,$duration,$tracknumber,$is_title,$lyricsby,$composedby,$arrangedby,$id_song)
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
            return $this->db->where('id_song', $id_song)->update('songs', $object);
        }
        public function do_video_edit($id_album,$video_name,$video_release_date,$link,$id_video)
        {
            $object = array (
                'id_album'              => $id_album,
                'video_name'            => $video_name,
                'video_release_date'    => $video_release_date,
                'link'                  => $link
            );
            return $this->db->where('id_video', $id_video)->update('videos', $object);
        }
        public function do_thumbnail_edit($filename,$id_video)
        {
            $object = array (
                'thumbnail'              => $filename
            );
            return $this->db->where('id_video', $id_video)->update('videos', $object);
        }
        public function do_album_edit($id_artist,$album_name,$album_desc,$album_ord,$release_date,$itunes,$spotify,$melon,$genie,$bugs,$flo,$vibe,$id_album)
        {
            $object = array (
                'id_artist'             => $id_artist,
                'album_name'            => $album_name,
                'release_date'          => $release_date,
                'album_description'     => $album_desc,
                'itunes'                => $itunes,
                'spotify'               => $spotify,
                'melon'                 => $melon,
                'genie'                 => $genie,
                'bugs'                  => $bugs,
                'flo'                   => $flo,
                'vibe'                  => $vibe,
                'album_order'           => $album_ord
            );
            return $this->db->where('id_album', $id_album)->update('albums', $object);
        }
        public function do_cover_edit($filename,$id_album)
        {
            $object = array (
                'cover'              => $filename
            );
            return $this->db->where('id_album', $id_album)->update('albums', $object);
        }
        public function do_artist_edit($id_artist,$name,$description,$instagram,$facebook,$twitter,$soundcloud,$commercial)
        {
            $object = array (
                'name'          => $name,
                'description'   => $description,
                'instagram'     => $instagram,
                'facebook'      => $facebook,
                'twitter'       => $twitter,
                'soundcloud'    => $soundcloud,
                'commercial'    => $commercial
            );
            return $this->db->where('id_artist', $id_artist)->update('artists', $object);
        }
        public function do_picture_edit($filename,$id_artist)
        {
            $object = array (
                'picture'              => $filename
            );
            return $this->db->where('id_artist', $id_artist)->update('artists', $object);
        }

//DETAIL PAGE
        public function getalbumbyid($id)
        {
            return $this->db->join('artists','albums.id_artist=artists.id_artist')
                            ->where('id_album',$id)->get('albums')->row();
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
        public function getartistbyid($id)
        {
            return $this->db->where('id_artist',$id)->get('artists')->row();
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
        public function getartistalbums($id)
        {
            return $this->db->order_by('release_date','DESC')->where('id_artist',$id)->get('albums')->result();
        }
    }
?>