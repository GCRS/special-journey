[ ![Codeship Status for GCRS/special-journey](https://codeship.com/projects/31856500-a977-0133-2a7c-2289211c8d4e/status?branch=master)](https://codeship.com/projects/130891)

#Auth
  -  `JWTAuth` [Check Steps here](https://github.com/tymondesigns/jwt-auth/wiki/Installation)

##Get Token
`/auth/login` **POST**

| Parameters|Value|
|------------|-------|
|Email|giansantillan18@gmail.com|
|Password|123456|

```json
{
  "success": true,
  "data": {
    "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjEsImlzcyI6Imh0dHA6XC9cL2xvY2FsaG9zdDo4MDAwXC9hdXRoXC9sb2dpbiIsImlhdCI6MTQ1NDI0OTc5MSwiZXhwIjoxNDU0NDY1NzkxLCJuYmYiOjE0NTQyNDk3OTEsImp0aSI6ImRmZmEyMmQyYTkzNDlkZjJkM2JiNzczNjhjYzcyYTJjIn0.eb64PU5Pn4hO49a8LRGRvistSwXUT14DpQQ0J4HrDWA"
  }
}
```

#User Scopes

#Me
`/me`
Returns
```json
{
  "data": {
    "id": 1,
    "name": "Gian Santillan",
    "email": "giansantillan18@gmail.com",
    "created_at": "2016-01-31 10:11:42",
    "updated_at": "2016-01-31 10:11:42",
    "organization_id": 1,
    "organization": {
      "id": 1,
      "organization_name": "Organization One",
      "slug": "organization",
      "created_at": "2016-01-31 08:50:24",
      "updated_at": "2016-01-31 08:50:24"
    }
  }
}
```
