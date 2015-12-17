# Linux

## Navigating the filesystem

Listing files:

```bash
$ ls
```

```bash
$ ls /
$ ls /dev/
```

This moves you to your `home` folder. This one is special.

```bash
$ cd
```

```bash
$ cd /dev/
$ ls
```

What to know where you are at in the filesystem?

```bash
$ pwd
```

## Working with files

Viewing file contents:

```bash
$ cat /etc/hosts
```

Make a new file:

```bash
$ nano test.txt
$ ls
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

If you want to look for packages to install, one way to do this is:

```bash
$ apt-cache search package-name
```

As always, Google is also your friend.
