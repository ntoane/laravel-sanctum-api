# Laravel REST API with Sanctum Authentication

## Routes

```
# Public

GET   /api/products
GET   /api/products/:id

POST   /api/login
@body: email, password

POST   /api/register
@body: name, email, password, password_confirmation


# Protected

POST   /api/products
@body: name, slug, description, price

PUT   /api/products/:id
@body: ?name, ?slug, ?description, ?price

DELETE  /api/products/:id

POST    /api/logout
```