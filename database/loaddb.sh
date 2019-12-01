#!/bin/sh
find database.db && rm database.db
cat hotw.sql populate.sql | sqlite3 database.db
