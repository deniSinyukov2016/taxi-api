---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#Accounts
<!-- START_622f9870a556bfd57a098c3c7045df61 -->
## Store

> Example request:

```bash
curl -X POST "http://localhost/api/v1/user/accounts" \
-H "Accept: application/json" \
    -d "fb_id"="eveniet" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/user/accounts",
    "method": "POST",
    "data": {
        "fb_id": "eveniet"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/user/accounts`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    fb_id | string |  required  | 

<!-- END_622f9870a556bfd57a098c3c7045df61 -->

<!-- START_3772c8d1e94876ea004736aaf6f1118b -->
## Update

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/user/accounts" \
-H "Accept: application/json" \
    -d "fb_id"="quisquam" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/user/accounts",
    "method": "PUT",
    "data": {
        "fb_id": "quisquam"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/user/accounts`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    fb_id | string |  required  | 

<!-- END_3772c8d1e94876ea004736aaf6f1118b -->

<!-- START_04fa2eca6404f9ae9f4e5e9073f66aee -->
## Delete

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/user/accounts" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/user/accounts",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/user/accounts`


<!-- END_04fa2eca6404f9ae9f4e5e9073f66aee -->

#Feedback
<!-- START_5ea6ab61bf6bf721148887c0ced29d88 -->
## Store

> Example request:

```bash
curl -X POST "http://localhost/api/v1/feedback" \
-H "Accept: application/json" \
    -d "body"="id" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/feedback",
    "method": "POST",
    "data": {
        "body": "id"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/feedback`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    body | string |  required  | Maximum: `1000`

<!-- END_5ea6ab61bf6bf721148887c0ced29d88 -->

#Images
<!-- START_796d8cbd139f7944a430e626c3e5acc4 -->
## Store

> Example request:

```bash
curl -X POST "http://localhost/api/v1/images" \
-H "Accept: application/json" \
    -d "file"="nesciunt" \
    -d "position"="1" \
    -d "old_img_id"="21" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/images",
    "method": "POST",
    "data": {
        "file": "nesciunt",
        "position": "1",
        "old_img_id": 21
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/images`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    file | string |  required  | 
    position | integer |  optional  | `1`, `2`, `3` or `4`
    old_img_id | integer |  optional  | Valid image id

<!-- END_796d8cbd139f7944a430e626c3e5acc4 -->

<!-- START_91e97babe411ae6cf71ffe46be046980 -->
## Destroy

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/images/{image}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/images/{image}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/images/{image}`


<!-- END_91e97babe411ae6cf71ffe46be046980 -->

#Messages
<!-- START_8a89d9625ace6829b2cd027e311faf0d -->
## Store

> Example request:

```bash
curl -X POST "http://localhost/api/v1/messages" \
-H "Accept: application/json" \
    -d "message"="molestias" \
    -d "receiver_id"="68701" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/messages",
    "method": "POST",
    "data": {
        "message": "molestias",
        "receiver_id": 68701
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/messages`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    message | string |  required  | 
    receiver_id | integer |  required  | 

<!-- END_8a89d9625ace6829b2cd027e311faf0d -->

<!-- START_86e4e9bc0a74549c444aaf8d92cbfe1d -->
## Update

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/messages/{message}" \
-H "Accept: application/json" \
    -d "read"="1" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/messages/{message}",
    "method": "PUT",
    "data": {
        "read": true
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/messages/{message}`

`PATCH api/v1/messages/{message}`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    read | boolean |  optional  | 

<!-- END_86e4e9bc0a74549c444aaf8d92cbfe1d -->

<!-- START_43b19fbb63d7c4904f02ac79cc6300dc -->
## Destroy

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/messages/{message}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/messages/{message}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/messages/{message}`


<!-- END_43b19fbb63d7c4904f02ac79cc6300dc -->

#Trips
<!-- START_b0bfe967e103764914eff25d075c572c -->
## Store

> Example request:

```bash
curl -X POST "http://localhost/api/v1/trips" \
-H "Accept: application/json" \
    -d "acceptor_id"="47216" \
    -d "from"="provident" \
    -d "to"="provident" \
    -d "date"="provident" \
    -d "comment"="provident" \
    -d "description"="provident" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/trips",
    "method": "POST",
    "data": {
        "acceptor_id": 47216,
        "from": "provident",
        "to": "provident",
        "date": "provident",
        "comment": "provident",
        "description": "provident"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/trips`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    acceptor_id | integer |  required  | 
    from | string |  required  | 
    to | string |  required  | 
    date | string |  required  | 
    comment | string |  required  | 
    description | string |  required  | 

<!-- END_b0bfe967e103764914eff25d075c572c -->

<!-- START_ecf5fb4113c49fd6979c221a0f8aa3c8 -->
## Show

> Example request:

```bash
curl -X GET "http://localhost/api/v1/trips/{trip}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/trips/{trip}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/trips/{trip}`

`HEAD api/v1/trips/{trip}`


<!-- END_ecf5fb4113c49fd6979c221a0f8aa3c8 -->

<!-- START_18a55de27e6b4e429ded5fdedbab7cf4 -->
## Update

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/trips/{trip}" \
-H "Accept: application/json" \
    -d "rated"="1" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/trips/{trip}",
    "method": "PUT",
    "data": {
        "rated": true
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/trips/{trip}`

`PATCH api/v1/trips/{trip}`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    rated | boolean |  optional  | 

<!-- END_18a55de27e6b4e429ded5fdedbab7cf4 -->

<!-- START_819b84a295a6859066bc63328b8e8eff -->
## Destroy

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/trips/{trip}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/trips/{trip}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/trips/{trip}`


<!-- END_819b84a295a6859066bc63328b8e8eff -->

<!-- START_6443e1fb88c6ec3284ebcf04eaceb34a -->
## Send accepted notification

> Example request:

```bash
curl -X POST "http://localhost/api/v1/send-accepted-notification/{user}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/send-accepted-notification/{user}",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/send-accepted-notification/{user}`


<!-- END_6443e1fb88c6ec3284ebcf04eaceb34a -->

#Users
<!-- START_080f3ecebb7bcc2f93284b8f5ae1ac3b -->
## Index

> Example request:

```bash
curl -X GET "http://localhost/api/v1/users" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/users",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "current_page": 1,
    "data": [
        {
            "id": 1,
            "first_name": "Admin",
            "email": "admin@cronix.ms",
            "device_token": "JfqR8RGwWrWMRnGqE84JfPJVjRhcudly0ou60as4KWv3Z1PUjDibPqF76iis",
            "provider": "facebook",
            "provider_id": "someId",
            "phone": null,
            "birthday": null,
            "twitter": null,
            "instagram": null,
            "relationship": null,
            "city": "Detroit",
            "more": null,
            "is_vehicle_owner": 1,
            "radius": 10,
            "lat": -118.52,
            "lng": 35.95,
            "transports": null,
            "avatar": null,
            "fb_id": null,
            "google_id": null,
            "created_at": "2017-09-27 16:27:29",
            "updated_at": "2017-09-27 16:27:29",
            "deleted_at": null,
            "online": 0,
            "distance": -1
        },
        {
            "id": 2,
            "first_name": "Natasha",
            "email": "maymie25@gmail.com",
            "device_token": "OkoEaMko1HJ9Et8PuOJdmahpxswS0UFCJ0pPIt7you4OJWdUuBABf9PjHPTW",
            "provider": "facebook",
            "provider_id": "someId",
            "phone": null,
            "birthday": null,
            "twitter": null,
            "instagram": null,
            "relationship": null,
            "city": "North Doug",
            "more": null,
            "is_vehicle_owner": 0,
            "radius": 6,
            "lat": -118.79,
            "lng": 35.03,
            "transports": null,
            "avatar": {
                "large": "http:\/\/localhost\/imagecache\/large\/e442006efa8ae2c06632bbafe1c02235.jpg",
                "small": "http:\/\/localhost\/imagecache\/small\/e442006efa8ae2c06632bbafe1c02235.jpg"
            },
            "fb_id": null,
            "google_id": null,
            "created_at": "2017-09-27 16:27:30",
            "updated_at": "2017-09-27 16:27:30",
            "deleted_at": null,
            "online": 0,
            "distance": -1
        },
        {
            "id": 3,
            "first_name": "Giovani",
            "email": "anna.mohr@gmail.com",
            "device_token": "kMCWPVuYznA3ky0usT7MjIUeSDfDUYkp8pQZRgM889uxAFZUgRwoknxRGPMO",
            "provider": "facebook",
            "provider_id": "someId",
            "phone": null,
            "birthday": null,
            "twitter": null,
            "instagram": null,
            "relationship": null,
            "city": "East Burleymouth",
            "more": null,
            "is_vehicle_owner": 0,
            "radius": 8,
            "lat": -118.75,
            "lng": 34.48,
            "transports": null,
            "avatar": {
                "large": "http:\/\/localhost\/imagecache\/large\/dff87b2bfd2d370d860ee7015cb1fe1d.jpg",
                "small": "http:\/\/localhost\/imagecache\/small\/dff87b2bfd2d370d860ee7015cb1fe1d.jpg"
            },
            "fb_id": null,
            "google_id": null,
            "created_at": "2017-09-27 16:27:30",
            "updated_at": "2017-09-27 16:27:30",
            "deleted_at": null,
            "online": 0,
            "distance": -1
        },
        {
            "id": 4,
            "first_name": "Genesis",
            "email": "hilll.wyatt@gmail.com",
            "device_token": "OtTgmul2u2QL0KPRpn9zKy7koqNc2nrWjBTWcmkCs1RFE02JTyIuCENOtWeu",
            "provider": "facebook",
            "provider_id": "someId",
            "phone": null,
            "birthday": null,
            "twitter": null,
            "instagram": null,
            "relationship": null,
            "city": "West Jennings",
            "more": null,
            "is_vehicle_owner": 1,
            "radius": 4,
            "lat": -119.3,
            "lng": 33.65,
            "transports": null,
            "avatar": {
                "large": "http:\/\/localhost\/imagecache\/large\/5aae5c8fe12e843864444039b15f2e41.jpg",
                "small": "http:\/\/localhost\/imagecache\/small\/5aae5c8fe12e843864444039b15f2e41.jpg"
            },
            "fb_id": null,
            "google_id": null,
            "created_at": "2017-09-27 16:27:31",
            "updated_at": "2017-09-27 16:27:31",
            "deleted_at": null,
            "online": 0,
            "distance": -1
        },
        {
            "id": 5,
            "first_name": "Emely",
            "email": "ottilie90@hotmail.com",
            "device_token": "roFaocJ89F597HdcQLLcjwgbkAPo7YlRrSRMgjePpGav3ZO8H8KPR5AwN5Mk",
            "provider": "facebook",
            "provider_id": "someId",
            "phone": null,
            "birthday": null,
            "twitter": null,
            "instagram": null,
            "relationship": null,
            "city": "North Doug",
            "more": null,
            "is_vehicle_owner": 0,
            "radius": 1,
            "lat": -118.52,
            "lng": 33.63,
            "transports": null,
            "avatar": {
                "large": "http:\/\/localhost\/imagecache\/large\/028381fa5fca427f7c40df1553e96228.jpg",
                "small": "http:\/\/localhost\/imagecache\/small\/028381fa5fca427f7c40df1553e96228.jpg"
            },
            "fb_id": null,
            "google_id": null,
            "created_at": "2017-09-27 16:27:31",
            "updated_at": "2017-09-27 16:27:31",
            "deleted_at": null,
            "online": 0,
            "distance": -1
        },
        {
            "id": 6,
            "first_name": "Ewell",
            "email": "ykerluke@jacobs.com",
            "device_token": "agLFeOYGT8MnMZyN9lVNbSm049NNh3ddLeZoHlSbpFNVtK0oTSTx3CWULJgL",
            "provider": "facebook",
            "provider_id": "someId",
            "phone": null,
            "birthday": null,
            "twitter": null,
            "instagram": null,
            "relationship": null,
            "city": "Efrenstad",
            "more": null,
            "is_vehicle_owner": 1,
            "radius": 8,
            "lat": -119.73,
            "lng": 33.42,
            "transports": null,
            "avatar": {
                "large": "http:\/\/localhost\/imagecache\/large\/3a5985a08befa943e4a9e9dda4b01b6d.jpg",
                "small": "http:\/\/localhost\/imagecache\/small\/3a5985a08befa943e4a9e9dda4b01b6d.jpg"
            },
            "fb_id": null,
            "google_id": null,
            "created_at": "2017-09-27 16:27:32",
            "updated_at": "2017-09-27 16:27:32",
            "deleted_at": null,
            "online": 0,
            "distance": -1
        },
        {
            "id": 7,
            "first_name": "Jocelyn",
            "email": "prohaska.estefania@lowe.com",
            "device_token": "6y8kVOJI6O9RbGnM0iBNa0tHTsYyG7q0BBX9tTBIwPatQVHhCwsM92ZnvAz0",
            "provider": "facebook",
            "provider_id": "someId",
            "phone": null,
            "birthday": null,
            "twitter": null,
            "instagram": null,
            "relationship": null,
            "city": "Efrenstad",
            "more": null,
            "is_vehicle_owner": 0,
            "radius": 1,
            "lat": -119.17,
            "lng": 34.38,
            "transports": null,
            "avatar": {
                "large": "http:\/\/localhost\/imagecache\/large\/406f8fbfdc05e3efd44b0c1017e554e9.jpg",
                "small": "http:\/\/localhost\/imagecache\/small\/406f8fbfdc05e3efd44b0c1017e554e9.jpg"
            },
            "fb_id": null,
            "google_id": null,
            "created_at": "2017-09-27 16:27:32",
            "updated_at": "2017-09-27 16:27:32",
            "deleted_at": null,
            "online": 0,
            "distance": -1
        },
        {
            "id": 8,
            "first_name": "Keira",
            "email": "hand.rhoda@ruecker.org",
            "device_token": "TMUfLnDgWFVSwTIYH1WS1TYIO7PXMcLskA1G73oVcUQLe4xIWyZIYcx3PZMT",
            "provider": "facebook",
            "provider_id": "someId",
            "phone": null,
            "birthday": null,
            "twitter": null,
            "instagram": null,
            "relationship": null,
            "city": "Tyrafort",
            "more": null,
            "is_vehicle_owner": 1,
            "radius": 9,
            "lat": -119.97,
            "lng": 34.15,
            "transports": null,
            "avatar": {
                "large": "http:\/\/localhost\/imagecache\/large\/f3a6716e02fe802df49fdb32a23ba262.jpg",
                "small": "http:\/\/localhost\/imagecache\/small\/f3a6716e02fe802df49fdb32a23ba262.jpg"
            },
            "fb_id": null,
            "google_id": null,
            "created_at": "2017-09-27 16:27:33",
            "updated_at": "2017-09-27 16:27:33",
            "deleted_at": null,
            "online": 0,
            "distance": -1
        },
        {
            "id": 9,
            "first_name": "Mabelle",
            "email": "magdalena36@boyer.net",
            "device_token": "t2A6idB8afRoOMAhsBALSNzYxQMeWXCmDCjFmALENben4kd6gcQz7Dgi58a9",
            "provider": "facebook",
            "provider_id": "someId",
            "phone": null,
            "birthday": null,
            "twitter": null,
            "instagram": null,
            "relationship": null,
            "city": "Tyrafort",
            "more": null,
            "is_vehicle_owner": 0,
            "radius": 7,
            "lat": -118.22,
            "lng": 34.87,
            "transports": null,
            "avatar": {
                "large": "http:\/\/localhost\/imagecache\/large\/b0118f3356c2734226efecb9f1a49b2d.jpg",
                "small": "http:\/\/localhost\/imagecache\/small\/b0118f3356c2734226efecb9f1a49b2d.jpg"
            },
            "fb_id": null,
            "google_id": null,
            "created_at": "2017-09-27 16:27:34",
            "updated_at": "2017-09-27 16:27:34",
            "deleted_at": null,
            "online": 0,
            "distance": -1
        },
        {
            "id": 10,
            "first_name": "Nicolas",
            "email": "rmosciski@yahoo.com",
            "device_token": "UsDxowlp2RalTkDETVuqNfmhGta71kak4siJPpYxgblM8JfFziIH512DtXzy",
            "provider": "facebook",
            "provider_id": "someId",
            "phone": null,
            "birthday": null,
            "twitter": null,
            "instagram": null,
            "relationship": null,
            "city": "Efrenstad",
            "more": null,
            "is_vehicle_owner": 0,
            "radius": 5,
            "lat": -119.13,
            "lng": 34.58,
            "transports": null,
            "avatar": {
                "large": "http:\/\/localhost\/imagecache\/large\/2a575ce5dd05e0b5a1223b2fbee361b8.jpg",
                "small": "http:\/\/localhost\/imagecache\/small\/2a575ce5dd05e0b5a1223b2fbee361b8.jpg"
            },
            "fb_id": null,
            "google_id": null,
            "created_at": "2017-09-27 16:27:34",
            "updated_at": "2017-09-27 16:27:34",
            "deleted_at": null,
            "online": 0,
            "distance": -1
        },
        {
            "id": 11,
            "first_name": "Tamia",
            "email": "khansen@becker.info",
            "device_token": "RRgh0VpPwZZEEFGyGeUHcMB9qEcuTA2VJ9oP43NzIyZrkfe7a7wNhNiclk7T",
            "provider": "facebook",
            "provider_id": "someId",
            "phone": null,
            "birthday": null,
            "twitter": null,
            "instagram": null,
            "relationship": null,
            "city": "Port Margarete",
            "more": null,
            "is_vehicle_owner": 1,
            "radius": 8,
            "lat": -119.3,
            "lng": 34.21,
            "transports": null,
            "avatar": {
                "large": "http:\/\/localhost\/imagecache\/large\/dd3cb30e31ca0d7a0ce881b2d84325cc.jpg",
                "small": "http:\/\/localhost\/imagecache\/small\/dd3cb30e31ca0d7a0ce881b2d84325cc.jpg"
            },
            "fb_id": null,
            "google_id": null,
            "created_at": "2017-09-27 16:27:34",
            "updated_at": "2017-09-27 16:27:34",
            "deleted_at": null,
            "online": 0,
            "distance": -1
        },
        {
            "id": 12,
            "first_name": "Issac",
            "email": "huels.ruth@jaskolski.com",
            "device_token": "nJtjnNd5Y4Z3Fv12ITN6Ac3MVpC1rmVUfLgLgMWPret0oSGQtDRz4AEwP7IB",
            "provider": "facebook",
            "provider_id": "someId",
            "phone": null,
            "birthday": null,
            "twitter": null,
            "instagram": null,
            "relationship": null,
            "city": "Efrenstad",
            "more": null,
            "is_vehicle_owner": 1,
            "radius": 8,
            "lat": -118.07,
            "lng": 34.79,
            "transports": null,
            "avatar": {
                "large": "http:\/\/localhost\/imagecache\/large\/fcf29a8a662bd1e83ebf1c5337fa6dee.jpg",
                "small": "http:\/\/localhost\/imagecache\/small\/fcf29a8a662bd1e83ebf1c5337fa6dee.jpg"
            },
            "fb_id": null,
            "google_id": null,
            "created_at": "2017-09-27 16:27:35",
            "updated_at": "2017-09-27 16:27:35",
            "deleted_at": null,
            "online": 0,
            "distance": -1
        },
        {
            "id": 13,
            "first_name": "Meaghan",
            "email": "evie.wunsch@wilderman.net",
            "device_token": "xOpDwRLmfjZDk4e1nEt85EDhRe8bKdht2sboAgkKVI2RzmzAbICdKfnEmQj9",
            "provider": "facebook",
            "provider_id": "someId",
            "phone": null,
            "birthday": null,
            "twitter": null,
            "instagram": null,
            "relationship": null,
            "city": "West Jennings",
            "more": null,
            "is_vehicle_owner": 0,
            "radius": 1,
            "lat": -119.42,
            "lng": 34.57,
            "transports": null,
            "avatar": {
                "large": "http:\/\/localhost\/imagecache\/large\/d46d7cf5b26fbb97b4474fe47045bf40.jpg",
                "small": "http:\/\/localhost\/imagecache\/small\/d46d7cf5b26fbb97b4474fe47045bf40.jpg"
            },
            "fb_id": null,
            "google_id": null,
            "created_at": "2017-09-27 16:27:36",
            "updated_at": "2017-09-27 16:27:36",
            "deleted_at": null,
            "online": 0,
            "distance": -1
        },
        {
            "id": 14,
            "first_name": "Uriel",
            "email": "fgerlach@yahoo.com",
            "device_token": "VVDWNMLEbY2IqpO548HwyVOB4nkY0fG5qqyeHlenowH0fDwDHlBbPW0Gz5XD",
            "provider": "facebook",
            "provider_id": "someId",
            "phone": null,
            "birthday": null,
            "twitter": null,
            "instagram": null,
            "relationship": null,
            "city": "West Jennings",
            "more": null,
            "is_vehicle_owner": 0,
            "radius": 6,
            "lat": -119.2,
            "lng": 35.78,
            "transports": null,
            "avatar": {
                "large": "http:\/\/localhost\/imagecache\/large\/3d235ad1c5244522e0c347763315d95c.jpg",
                "small": "http:\/\/localhost\/imagecache\/small\/3d235ad1c5244522e0c347763315d95c.jpg"
            },
            "fb_id": null,
            "google_id": null,
            "created_at": "2017-09-27 16:27:36",
            "updated_at": "2017-09-27 16:27:36",
            "deleted_at": null,
            "online": 0,
            "distance": -1
        },
        {
            "id": 15,
            "first_name": "Anjali",
            "email": "emmet95@bahringer.com",
            "device_token": "HdmhFZXObafLfV8vDBlEK0K8YKEhOA5hMOBq38PSKQQ2HwNAFXrJsguB0ER6",
            "provider": "facebook",
            "provider_id": "someId",
            "phone": null,
            "birthday": null,
            "twitter": null,
            "instagram": null,
            "relationship": null,
            "city": "East Burleymouth",
            "more": null,
            "is_vehicle_owner": 1,
            "radius": 1,
            "lat": -118.99,
            "lng": 35.41,
            "transports": null,
            "avatar": {
                "large": "http:\/\/localhost\/imagecache\/large\/1b0d5db1a42b77eaeae75dc8edc65c47.jpg",
                "small": "http:\/\/localhost\/imagecache\/small\/1b0d5db1a42b77eaeae75dc8edc65c47.jpg"
            },
            "fb_id": null,
            "google_id": null,
            "created_at": "2017-09-27 16:27:37",
            "updated_at": "2017-09-27 16:27:37",
            "deleted_at": null,
            "online": 0,
            "distance": -1
        }
    ],
    "from": 1,
    "last_page": 4,
    "next_page_url": "http:\/\/localhostapi\/v1\/users?page=2",
    "path": "http:\/\/localhostapi\/v1\/users",
    "per_page": 15,
    "prev_page_url": null,
    "to": 15,
    "total": 51
}
```

### HTTP Request
`GET api/v1/users`

`HEAD api/v1/users`


<!-- END_080f3ecebb7bcc2f93284b8f5ae1ac3b -->

<!-- START_4194ceb9a20b7f80b61d14d44df366b4 -->
## Store

> Example request:

```bash
curl -X POST "http://localhost/api/v1/users" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/users",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/users`


<!-- END_4194ceb9a20b7f80b61d14d44df366b4 -->

<!-- START_b4ea58dd963da91362c51d4088d0d4f4 -->
## Show

> Example request:

```bash
curl -X GET "http://localhost/api/v1/users/{user}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/users/{user}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/users/{user}`

`HEAD api/v1/users/{user}`


<!-- END_b4ea58dd963da91362c51d4088d0d4f4 -->

<!-- START_296fac4bf818c99f6dd42a4a0eb56b58 -->
## Update

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/users/{user}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/users/{user}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/users/{user}`

`PATCH api/v1/users/{user}`


<!-- END_296fac4bf818c99f6dd42a4a0eb56b58 -->

<!-- START_22354fc95c42d81a744eece68f5b9b9a -->
## Destroy

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/users/{user}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/users/{user}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/users/{user}`


<!-- END_22354fc95c42d81a744eece68f5b9b9a -->

<!-- START_bb46159eed06696503b279a3d0c767fe -->
## Trips

> Example request:

```bash
curl -X GET "http://localhost/api/v1/user/trips" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/user/trips",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/user/trips`

`HEAD api/v1/user/trips`


<!-- END_bb46159eed06696503b279a3d0c767fe -->

<!-- START_194708ac2fd7da748bfb13fdc7f6e1ec -->
## Following

> Example request:

```bash
curl -X GET "http://localhost/api/v1/user/following" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/user/following",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/user/following`

`HEAD api/v1/user/following`


<!-- END_194708ac2fd7da748bfb13fdc7f6e1ec -->

<!-- START_3813f12c79b864fbf81eba31dc64d359 -->
## Followers

> Example request:

```bash
curl -X GET "http://localhost/api/v1/user/followers" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/user/followers",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/user/followers`

`HEAD api/v1/user/followers`


<!-- END_3813f12c79b864fbf81eba31dc64d359 -->

<!-- START_dda503bb81ae20415cb5990903c0666b -->
## Conversations

> Example request:

```bash
curl -X GET "http://localhost/api/v1/user/conversations" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/user/conversations",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/user/conversations`

`HEAD api/v1/user/conversations`


<!-- END_dda503bb81ae20415cb5990903c0666b -->

<!-- START_9ca5abaf810393a3f88180b97189a4c1 -->
## Messages

> Example request:

```bash
curl -X GET "http://localhost/api/v1/user/messages/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/user/messages/{id}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/user/messages/{id}`

`HEAD api/v1/user/messages/{id}`


<!-- END_9ca5abaf810393a3f88180b97189a4c1 -->

<!-- START_55c35b27a4cfe8d08575406ec2fa823d -->
## Images

> Example request:

```bash
curl -X GET "http://localhost/api/v1/user/images" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/user/images",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/user/images`

`HEAD api/v1/user/images`


<!-- END_55c35b27a4cfe8d08575406ec2fa823d -->

<!-- START_6ecdb0d0d87d0f7774a288179b0426a2 -->
## Get members around

> Example request:

```bash
curl -X GET "http://localhost/api/v1/user/get-around" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/user/get-around",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/user/get-around`

`HEAD api/v1/user/get-around`


<!-- END_6ecdb0d0d87d0f7774a288179b0426a2 -->

<!-- START_3ca7bd04f9b25b1c583870d90171ba77 -->
## Count new events

> Example request:

```bash
curl -X GET "http://localhost/api/v1/user/count-events" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/user/count-events",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/user/count-events`

`HEAD api/v1/user/count-events`


<!-- END_3ca7bd04f9b25b1c583870d90171ba77 -->

<!-- START_be4d32d846a1e962a20e2e92547bf67f -->
## Testimonials

> Example request:

```bash
curl -X GET "http://localhost/api/v1/user/testimonials/{user}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/user/testimonials/{user}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/user/testimonials/{user}`

`HEAD api/v1/user/testimonials/{user}`


<!-- END_be4d32d846a1e962a20e2e92547bf67f -->

<!-- START_2c3ddd3f2817f92b72a2612f710f5389 -->
## Set avatar

> Example request:

```bash
curl -X POST "http://localhost/api/v1/user/set-avatar" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/user/set-avatar",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/user/set-avatar`


<!-- END_2c3ddd3f2817f92b72a2612f710f5389 -->

<!-- START_f11ee440711aab581aee209608b07d16 -->
## Delete avatar

> Example request:

```bash
curl -X POST "http://localhost/api/v1/user/delete-avatar" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/user/delete-avatar",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/user/delete-avatar`


<!-- END_f11ee440711aab581aee209608b07d16 -->

<!-- START_a53b70b6bd009313f5f543fedda8d74b -->
## Add testimonial

> Example request:

```bash
curl -X POST "http://localhost/api/v1/user/add-testimonial" \
-H "Accept: application/json" \
    -d "user_id"="6133914" \
    -d "rating"="6133914" \
    -d "comment"="porro" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/user/add-testimonial",
    "method": "POST",
    "data": {
        "user_id": 6133914,
        "rating": 6133914,
        "comment": "porro"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/user/add-testimonial`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    user_id | integer |  required  | 
    rating | integer |  required  | 
    comment | string |  optional  | 

<!-- END_a53b70b6bd009313f5f543fedda8d74b -->

<!-- START_87dcf403330a27dec500670a0933be05 -->
## Follow

> Example request:

```bash
curl -X POST "http://localhost/api/v1/user/follow/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/user/follow/{id}",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/user/follow/{id}`


<!-- END_87dcf403330a27dec500670a0933be05 -->

<!-- START_395f648afe75459de7c2ed83d29eaf61 -->
## Unfollow

> Example request:

```bash
curl -X POST "http://localhost/api/v1/user/unfollow/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/user/unfollow/{id}",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/user/unfollow/{id}`


<!-- END_395f648afe75459de7c2ed83d29eaf61 -->

<!-- START_ed50a8e848be7e47823df5c49be1ace0 -->
## Deactivate

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/user/deactivate" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/user/deactivate",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/user/deactivate`


<!-- END_ed50a8e848be7e47823df5c49be1ace0 -->

<!-- START_28e685420b0e7112e74031353ec2f4bd -->
## Me

> Example request:

```bash
curl -X GET "http://localhost/api/v1/me" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/me",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "error": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/me`

`HEAD api/v1/me`


<!-- END_28e685420b0e7112e74031353ec2f4bd -->

#general
<!-- START_6fe98d7ced9bf8a790a2e2c2cb69689c -->
## Show the application&#039;s login form.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/login" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/login",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/v1/login`

`HEAD api/v1/login`


<!-- END_6fe98d7ced9bf8a790a2e2c2cb69689c -->

<!-- START_8c0e48cd8efa861b308fc45872ff0837 -->
## Handle a login request to the application.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/login" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/login",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/login`


<!-- END_8c0e48cd8efa861b308fc45872ff0837 -->

<!-- START_fb2ae43e2e99ff4e90f22ba03801a735 -->
## Log the user out of the application.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/logout" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/logout",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/logout`


<!-- END_fb2ae43e2e99ff4e90f22ba03801a735 -->

<!-- START_82703f5860426190c1aec309db25fa45 -->
## Show the application registration form.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/register" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/register",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/v1/register`

`HEAD api/v1/register`


<!-- END_82703f5860426190c1aec309db25fa45 -->

<!-- START_8ae5d428da27b2b014dc767c2f19a813 -->
## Handle a registration request for the application.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/register" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/register",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/register`


<!-- END_8ae5d428da27b2b014dc767c2f19a813 -->

<!-- START_f74f5d180f1ce42ff67f887b656ea4d3 -->
## Display the form to request a password reset link.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/password/reset" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/password/reset",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/v1/password/reset`

`HEAD api/v1/password/reset`


<!-- END_f74f5d180f1ce42ff67f887b656ea4d3 -->

<!-- START_41c40ad08033960fe2cc3dcaf77839de -->
## Send a reset link to the given user.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/password/email" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/password/email",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/password/email`


<!-- END_41c40ad08033960fe2cc3dcaf77839de -->

<!-- START_1da0af59e87a37b059ee0ca68283c2a7 -->
## Display the password reset view for the given token.

If no token is present, display the link request form.

> Example request:

```bash
curl -X GET "http://localhost/api/v1/password/reset/{token}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/password/reset/{token}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/v1/password/reset/{token}`

`HEAD api/v1/password/reset/{token}`


<!-- END_1da0af59e87a37b059ee0ca68283c2a7 -->

<!-- START_a62f1703e9fba891a3e20ff27854aac0 -->
## Reset the given user&#039;s password.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/password/reset" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/password/reset",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/password/reset`


<!-- END_a62f1703e9fba891a3e20ff27854aac0 -->

<!-- START_b1a24d5a76378cfd7f6c016ca6d0decf -->
## Facebook Authorization

> Example request:

```bash
curl -X GET "http://localhost/api/v1/auth/{token}" \
-H "Accept: application/json" \
    -d "city"="recusandae" \
    -d "lat"="recusandae" \
    -d "lng"="recusandae" \
    -d "device_token"="recusandae" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/v1/auth/{token}",
    "method": "GET",
    "data": {
        "city": "recusandae",
        "lat": "recusandae",
        "lng": "recusandae",
        "device_token": "recusandae"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "device_token": [
        "The device token field is required."
    ]
}
```

### HTTP Request
`GET api/v1/auth/{token}`

`HEAD api/v1/auth/{token}`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    city | string |  optional  | 
    lat | string |  optional  | 
    lng | string |  optional  | 
    device_token | string |  required  | 

<!-- END_b1a24d5a76378cfd7f6c016ca6d0decf -->

