# SidebarApi #

With this module you can query a third party (open) API and show the output in the freescout sidebar. 

### How do I get install this module? ###

* clone repo and make sure inside freescout module folder (freecout/Modules)
* go to dashboard and activate module
* run migration (optionally, if not run by freescout)
* go to SidebarAPI settings for each mailbox and configure the API URL
<img width="710" alt="Screenshot 2021-05-26 at 7 16 51 PM" src="https://user-images.githubusercontent.com/84848350/119670914-ee55d700-be56-11eb-96c4-7fdc3071d894.png">
* for the API response make sure its in the following format (an array of objects and inside object it can be anything)

```
[{
"user_id": "id",
"plan_name": "plan name",
"anything there" : "yeah anything",
"link": "https://link.com"
}]
```
