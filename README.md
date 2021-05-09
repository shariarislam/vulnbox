
## LFI and XSS Docker containers

### To run vulnerable container use:

`docker build . -t vulnbox:latest`

`docker run -p 80:80 vulnbox:latest`

### To run fixed container use:

`docker build . -t vulnbox_fixed:latest`

`docker run -p 80:80 vulnbox_fixed:latest`
