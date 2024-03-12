I used Windows 11 Pro x64 to demonstrate this setup on XAMPP. I chose XAMPP over IIS because I found it required fewer steps to set up.

Perform the following steps with an administrator user account on your Windows machine:
1) Download and install XAMPP from https://www.apachefriends.org/download.html (I used version 8.2.12).
2) Open the XAMPP Control Panel and ensure that the Apache server is started. If port 80 is already in use (e.g., by IIS), consider changing it to a higher number (e.g., 8000+).
3) Download the ZIP file of the repository and unzip it to the C:\xampp\htdocs directory (the default location for web files in XAMPP).
4) Open any web browser and navigate to http://localhost/index.html.
5) Use the provided interface to start, stop, destroy, or check the status of your Vagrant VM. Note that the status text refreshes only once, so please be patient. This is a minimum viable product; you may find it helpful to use the terminal or command prompt to check your Vagrant status.

