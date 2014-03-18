# doctrine2-logger

Zend Framework 2 Module for Doctrine 2 SQL Logger using Zend Log

## Composer install
```
  require: {
    "eddiejaoude/doctrine2-logger" : "dev-master"
  }
```


## SQL logging example

```
2014-03-15T08:13:24+00:00 INFO (7): Executed Query:  Array
(
    [sql] => SELECT t0.id AS id1, t0.email AS email2, t0.firstname AS firstname3, t0.surname AS surname4, t0.roles AS roles5, t0.suspended AS suspended6 FROM users t0 WHERE t0.id = ?
    [params] => Array
        (
            [0] => 64
        )

    [types] => Array
        (
            [0] => integer
        )

    [executionMS] => 0.0003349781036377
)
```

