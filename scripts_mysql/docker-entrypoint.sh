#!/bin/bash

user=root
password=root
database=ancestry

mysql --user="$user" --password="$password" --database="$database" --execute="CREATE TABLE members (name VARCHAR(35), sex CHAR(1), birth DATE, death DATE)"

mysql --user="$user" --password="$password" --database="$database" --execute="INSERT INTO members VALUES ('Fritzi Fummel', 'm', '1964-08-11', NULL)"



