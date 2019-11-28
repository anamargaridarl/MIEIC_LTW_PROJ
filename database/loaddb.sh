#!/bin/sh
cat hotw.sql populate.sql | sqlite3 database.db
