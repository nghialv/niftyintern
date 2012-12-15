<?php
  require_once 'common.php';

  global $db;

  define('APP_ID', '498433533511109');
  define('APP_SECRET', '17f52538817f5d63f2a06dac290e187d');
  define('CALLBACK', 'http://cu692uo-ao9-app000.c4sa.net/callback.php');
  define('APP_SCOPE', 'user_about_me,friends_about_me,user_activities,friends_activities,user_birthday,friends_birthday,user_checkins,friends_checkins,user_education_history,friends_education_history,user_events,friends_events,user_groups,friends_groups,user_hometown,friends_hometown,user_interests,friends_interests,user_likes,friends_likes,user_location,friends_location,user_notes,friends_notes,user_online_presence,friends_online_presence,user_photos,friends_photos,user_questions,friends_questions,user_relationships,friends_relationships,user_relationship_details,friends_relationship_details,user_religion_politics,friends_religion_politics,user_status,friends_status,user_videos,friends_videos,user_website,friends_website,user_work_history,friends_work_history,email,read_friendlists,read_insights,read_mailbox,read_requests,read_stream,xmpp_login,ads_management,create_event,manage_friendlists,manage_notifications,offline_access,publish_checkins,publish_stream,rsvp_event,publish_actions,manage_pages,user_subscriptions');

  $authURL = 'https://www.facebook.com/dialog/oauth?client_id='. APP_ID . '&rediret_uri=' . urlencode(CALLBACK) . '&scope=' . APP_SCOPE;

  header("Location: " . $authURL);

  /*
  $result = $db->query("SELECT * FROM user");
  foreach ($result as $row) {
        echo $row["email"] ." , ". $row["fb_uid"] . "<br/>";
    }
  */

  /*
  $resutl = $db->query("INSERT INTO user (email, fb_uid, fb_token, fb_secret)
      VALUES ('test@gmail.com', '5423452354', 'asdfasfasdf', 'asdfas') ");
  var_dump($result);
  */

