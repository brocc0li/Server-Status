# Server-Status

Supported Games:
Almost everygame that is within the Steam Liberary.
Supported VOIP:
Teamspeak 3.

**Setup**

1: uploade the files to your website.

2: Locate config.php.

3: Edit line line 10, 11, 12 with your desired information.

3: Edit line 15, replace YourHomePageURL.com with your website URL.

**Add More Servers**

Copy This:  ```array_push($address, query_source("94.23.153.176:28015"));```

Replace ip:port with your server ip:port!

**Add More URLS in the header** 

Copy this: ```array_push($links, addLink("https://forums.yourwebsit.com;Forums"));```

Edit https://forums.yourwebsite.com to the location you want the url to point, and edit ;Forums, to what you want the button to say.

**Known Problems:**

No Known problems.

**ToDo:**

- Add A Disable function for TeamSpeak 3 Stats.
- Add more support for Voip softwares. Discord, Ventrilo, Mumble etc...
- Add support for non-Steam Games. Minecraft etc...
- Add support for change of the Favicons and og: info

