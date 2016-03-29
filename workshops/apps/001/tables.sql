
CREATE DATABASE 001;

CREATE TABLE sunrisesunset (
    id int,
    day date,
    sunrise_time timestamp,
    sunset_time timestamp
);


INSERT INTO sunrise_sunset (id, day, sunrise_time, sunset_time)
VALUES (1, 2016-03-29, 05:04:00, 08:30:50);

INSERT INTO sunrise_sunset (id, day, sunrise_time, sunset_time)
VALUES (2, 2016-03-30, 05:09:00, 08:35:50);

INSERT INTO sunrise_sunset (id, day, sunrise_time, sunset_time)
VALUES (3, 2016-03-31, 05:14:00, 08:42:50);

INSERT INTO sunrise_sunset (id, day, sunrise_time, sunset_time)
VALUES (4, 2016-04-01, 05:20:00, 08:55:50);
