
create sample (
  id int,
  color varchar(200),
);

create table other (
  id int,
  number int,
);

INSERT INTO sample (id, color) VALUES (1, "blue");
INSERT INTO sample (id, color) VALUES (2, "orange");
INSERT INTO sample (id, color) VALUES (3, "white");


INSERT INTO other (id, number) VALUES (100, 99);
INSERT INTO other (id, number) VALUES (101, 98);

SELECT
  *
FROM sample
INNER JOIN other
WHERE sample.color = other.number;
