# Down or What? API
Made with PHP

In production: [Hawk](https://usehawk.ga/)

Visit the demo [here][dow-site]

## Usage
API is currently open to anyone and you don't need an API key.

### STEPS:
1. Just perform a POST or GET request to
```https://dow-api.herokuapp.com/?url=<site-name-entered-by-user>```

2. The Server will return JSON like this: (Ex: https://www.google.com)
```json
{
  "status": "Up",
  "latency": 4668.242775,
  "code": 200,
  "size": 46680,
  "speed": 0.01,
  "lookup": 16.587,
  "establish": 20.562,
  "content": "text\/html; charset=ISO-8859-1",
  "ssl": "Google Internet Authority G2",
  "sslexp": "May 8 10:39:00 2018 GMT",
  "checkTime": "2018-03-01 17:26:04"
}
```

3. All you have to do is parse the JSON.

If you are interested, check out the [demo page][dow-site] and view the source code

### Testing
To test if your site/API is working, you can do this: `https://dow-api.herokuapp.com/test-codes?code=<any-reponse-code>`

## License
MIT LICENSE<br>

Made with :heart: and :headphones: by akaanksh

[apad-repo]: https://github.com/akaanksh/apad
[dow-site]: https://dow.akaanksh.ga/
[dow-api]: https://github.com/akaanksh/dow-api
