# mysql + linux workshop

## Goals!

 - Learn some basics of a linux environment
 - Learn some basics of mysql server administration

_DISCLAIMER 0: Much of what we will be doing will be side steping any security concerns involved with linux administration._

_DISCLAIMER 1: I am not responsible for anything you type into a terminal of a server. This guide is mostly for reference._

## Requirements

 - terminal emulator (Terminal, iTerm2)
 - ssh key (will be provided)
 - an internet connection

## Setup

We will be using a virtual machine hosted in the cloud (DigitalOcean). We will each remotely connect to our own machine
so we don't mess with someone elses machines.

The instructor will give you two things:

 - server ip address (ex: 192.168.0.2)
 - ssh key (ex: id_rsa)

Put the ssh key on your machine where you can remember the location.

### Connecting

```bash
$ chmod 700 id_rsa
$  ssh -i id_rsa.pub root@<IP_ADDRESS_CHANGE_ME>
The authenticity of host 'IP_ADDRESS (IP_ADDRESS)' can't be established.
ECDSA key fingerprint is LKSJDFLKJS
Are you sure you want to continue connecting (yes/no)? yes
Warning: Permanently added 'IP_ADDRESS' (ECDSA) to the list of known hosts.
Enter passphrase for key 'id_rsa.pub':

$ ssh -i id_rsa root@<IP_ADDRESS_CHANGE_ME>
Welcome to Ubuntu 14.04.3 LTS (GNU/Linux 3.13.0-71-generic x86_64)

 * Documentation:  https://help.ubuntu.com/

  System information as of Thu Dec 17 09:05:26 EST 2015

  System load: 0.0                Memory usage: 9%   Processes:       51
  Usage of /:  10.6% of 19.56GB   Swap usage:   0%   Users logged in: 0

  Graph this data and manage this system at:
    https://landscape.canonical.com/

root@db-0:~# uname -a
```

Before we can move on, you must be able to connect like the above.

## Next Steps

 - [linux](linux.md)
 - [mysql](mysql.md)
