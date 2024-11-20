CREATE TABLE `contributor` (
  `contrib_id` int(32) NOT NULL,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`contrib_id`)
);


CREATE TABLE `file` (
  `file_id` int(32) NOT NULL,
  `version` varchar(100) DEFAULT NULL,
  `song_id` int(32) DEFAULT NULL,
  PRIMARY KEY (`file_id`),
  FOREIGN KEY (`song_id`) REFERENCES `song` (`song_id`)
);

CREATE TABLE `song` (
  `song_id` int(32) NOT NULL,
  `artist` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  PRIMARY KEY (`song_id`)
);

CREATE TABLE `song_contributor` (
  `song_id` int(32) NOT NULL,
  `contrib_id` int(32) NOT NULL,
  `role` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`song_id`,`contrib_id`),
  FOREIGN KEY (`song_id`) REFERENCES `song` (`song_id`),
  FOREIGN KEY (`contrib_id`) REFERENCES `contributor` (`contrib_id`)
);

CREATE TABLE `user` (
  `user_id` int(32) NOT NULL,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`)
);


CREATE TABLE `user_song` (
  `user_id` int(32) NOT NULL,
  `song_id` int(32) NOT NULL,
  `queue_type` char(1) DEFAULT NULL,
  `payment` float DEFAULT NULL,
  `position` int(100) DEFAULT NULL,
  PRIMARY KEY (`user_id`,`song_id`),
  FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  FOREIGN KEY (`song_id`) REFERENCES `song` (`song_id`)
);
