Welcome to the hz-showcase wiki!

## Accounts needed

* Github account
* Airtable account
* Figma account

## API Keys
For development your gonna need your own API key, once you've been added to the airtable you can simply generate it on your account page under "<> API".


## Benodigde software:
- A code editor that can actually make something of PHP, I used PHPstorm
- XAMPP, this installs PHP on your machine
- Composer

## Issues and assignments
Can be found under [Issues](https://github.com/HZ-HBO-ICT/hz-showcase/issues)

## Software we have used and have been installed into Laravel:
- Laravel Agent: https://github.com/jenssegers/agent
- OwlCarousel: https://owlcarousel2.github.io/OwlCarousel2/
- Bootstrap: https://getbootstrap.com/
- Airtable, this is mostly their own wiki and isn't really installed, we just made a Controller that handles the requests based on their API. https://airtable.com/

## How does the app actually work?
The app makes a HTTP request based on your API key (it does this in RequestController), which contains all the information you need. This whole HTTP request is directly copied from the Airtable documentation. You can then simply call the right path with $response and tada, the information shows up on your page.

The details page is an extra function in RequestController, that scoops up the ID and makes a path called /details/ID. This whole function is based on this laracasts episode: https://laracasts.com/series/laravel-6-from-scratch/episodes/19

# Corresponding prototype / wireframes:
[Figma wireflow](https://www.figma.com/file/4OaCg7FiXaJjkvckXzown4/Showcase-prototype?node-id=0%3A1)
![Picture](https://cdn.discordapp.com/attachments/714481726629609482/806241701352964146/wireflow_Showcase.PNG)

## CAUTION
On Airtable, attachments MUST have something in them, otherwise the app doesn't have anything to pull and will give errors! So make sure tags and photo's have something in them.
