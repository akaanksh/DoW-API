# Down or What? API
Part of [akaanksh/apad][apad-repo].

## Purpose
Gets the HTTP response code of any site along with information about the code, and a suggested solution (if any) and delivers it in JSON format.

Visit the site [here][dow-site]

## Usage
API is currently open to anyone and you don't need an API key.
STEPS:
1. Just perform a POST or GET request to
```https://dow-api.herokuapp.com/?site=<site-name-entered-by-user>```

2. The Server will return JSON like this: (Ex: https://www.google.com)
```json
{
  "status": "Up",
  "code": "200", 
  "codeMeaning": "OK", 
  "inDepth": "Everything is operational", 
  "possibleFix": "None" 
}
```

3. All you have to do is Parse the JSON.
If you are interested, check out the [demo page][dow-site] and view the source code

## License
GNU GENERAL PUBLIC LICENSE<br>
Why?<br>
To gain recognition. Will change to MIT over time.

Made with :heart: and :headphones: by akaanksh

[apad-repo]: https://github.com/akaanksh/apad
[dow-site]: https://dow.akaanksh.ga/
[dow-api]: https://github.com/akaanksh/dow-api
