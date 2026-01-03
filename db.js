const mysql = require("mysql");

const db = mysql.createConnection({
  host: "localhost",
  user: "root",
  database: "resource_tracker"
});

db.connect();
module.exports = db;
