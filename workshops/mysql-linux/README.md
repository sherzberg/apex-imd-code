# mysql + linux workshop

## Requirements

 - terminal emulator (Terminal, iTerm2)
 - ssh key (will be provided)
 - an internet connection

## Setup

We will be using a virtual machine hosted in the cloud (DigitalOcean). We will each remotely connect to our own machine
so we don't mess with someone elses machines.

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

## Installing Packages

Before we can setup and use `mysql`, we need to be able to install it.

We are using the Ubuntu Linux distribution. Ubuntu comes with a software package management system that allows an operator
to install, update and remove system software really easily.

To install anything, you must first update the local cache of software that is available:

```bash
$ apt-get update
```

When that completes, you can now install new things. Lets try this out:

```bash
$ apt-get install cowsay
...
Setting up cowsay (3.03+dfsg1-6) ...
```

Our `cowsay` package is installed, now lets use it to make sure.

```bash
$ cowsay "I am installed!"
```

## Next Steps

 - [linux](linux.md)
 - [mysql](mysql.md)
