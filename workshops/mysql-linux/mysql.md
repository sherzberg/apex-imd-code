# mysql

## Installing

Installing mysql for the first time will prompt you for a few things. Read the prompts carefully.

```bash
$ apt-get install mysql-server
```

That's it! We should b able to connect and vew some default database information:

```bash
$ mysql -p
Enter password:
mysql> show databases;
+--------------------+
| Database           |
+--------------------+
| information_schema |
| mysql              |
| performance_schema |
+--------------------+
3 rows in set (0.00 sec)
mysql> select user from mysql.user;
+------------------+
| user             |
+------------------+
| root             |
| root             |
| root             |
| debian-sys-maint |
| root             |
+------------------+
```

Check your output after entering commands at the `mysql>` prompt, it should match the above.

From now on, if the prompt starts with `mysql>`, you should assume we are doing mysql things.

## Create a database

```bash
mysql> create databse apex;
mysql> show databases;
```

Now we have a database! Let's set it as the default for this connection:

```bash
mysql> use apex;
```

Let's view the tables we have:

```bash
mysql> show tables;
```

## Exercises

 - What columns does the `mysql.user` table have? (hint: `mysql` is a different database)
 - Create a user table in the `apex` database.
 - Create a tweet table in the `apex` database.
 - Insert some data for the two tables made above.
 - Select the count of tables.
