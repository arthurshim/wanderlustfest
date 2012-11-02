<?php

function schema_mysqli_engine_type_map() {
  return schema_mysql_engine_type_map();
}

function schema_mysqli_schema_type_map() {
  return schema_mysql_schema_type_map();
}

function schema_mysqli_create_table_sql($table) {
  return schema_mysql_create_table_sql($table);
}

function schema_mysqli_inspect($name = NULL) {
  return schema_mysql_inspect($name);
}
