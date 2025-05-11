# Task 1
## Interpreting account and group information
> What is your UID and what is your account name ?

```sh
$ id
uid=1000(syseria) gid=1000(syseria) groups=1000(syseria),4(adm),24(cdrom),27(sudo),30(dip),46(plugdev),101(lxd)
```
As shown by the command, my username is `syseria` and my UID is `1000`.
> What is the GID of your primary group and what is its name ?

Through the previous command we can see that my primary group name is `syseria` and its GID is `1000`.

> How many other groups are you a member of ?

Through the previous command we can see that I am part of 6 other groups (adm, cdrom, sudo, dip, plugdev and lxd)

## Interpreting access control metadata on files and directories

> Determine who is the owner, which group own or can access the following files

```sh
# Command used, only given once as the only change is the path
$ ls -l /etc/passwd
-rw-r--r-- 1 root root 1786 Feb 24 16:07 /etc/passwd
```

- `/etc/passwd`
	- Owner: `root` - can read and write
	- Group Owner: `root` - can read
	- Others - can read
- `/bin/ls`
	- Owner: `root` - can read, write and execute
	- Group Owner: `root` - can read and execute
	- Others - can read and execute
- `~/.bashrc`
	- Owner: `syseria` - can read and write
	- Group Owner: `syseria` - can read
	- Others - can read
- `~/.bash_history`
	- Owner: `syseria` - can read and write
	- Group Owner: `syseria` - none
	- Others - none

> Examine the permissions of your home directory

```sh
$ ls -ld /home/syseria
drwxr-x--x 11 syseria syseria 4096 Apr  5 09:36 /home/syseria
```
First letter `d` indicates it is a *D*irectory.  
- Owner: syseria - can list (read), write and traverse (execute)
- Group Owner: syseria - can list (read) and traverse (execute)
- Others: can traverse (execute)

> What permission allows you to create files in the `/tmp` directory ?

```sh
$ ls -lad /tmp/
drwxrwxrwt. 23 root root 640 May  5 15:20 /tmp/
```
It is owned by `root`, so the current user `syseria` is not part of the `root` group so the permissions that apply are on the last 3 digits `rwt`. The `w` gives us the possibility to create files. This `t` in place of the `x` position, is the sticky bit that makes only able to delete files we own and not files created by other users.

## Modifying access rights
### Part 1
```sh
# Start
$ touch file
$ chmod 600 file
$ ls -l
total 0
-rw------- 1 syseria syseria 0 Apr 28 14:58 file

# rw- r-- --
$ chmod g+r file
$ ls -l
total 0
-rw-r----- 1 syseria syseria 0 Apr 28 14:58 file

# rwx r-x ---
$ chmod ug+x file
$ ls -l
total 0
-rwxr-x--- 1 syseria syseria 0 Apr 28 14:58 file

# r-- r-- r--
$ chmod a=r file
$ ls -l
total 0
-r--r--r-- 1 syseria syseria 0 Apr 28 14:58 file

# rwx r-- r--
$ chmod u+wx file
$ ls -l
total 0
-rwxr--r-- 1 syseria syseria 0 Apr 28 14:58 file

# rwx --- ---
$ chmod og-r file
$ ls -l
total 0
-rwx------ 1 syseria syseria 0 Apr 28 14:58 file
```

### Part 2
Todo

### Part 5

```sh
test_dir:
total 12
drwxrwxr-x 2 a2va proj_a 4096 May 11 10:15 dir proj a
drwxr-xrwx 2 a2va a2va   4096 May 11 10:15 dira
drwxr-xr-x 2 a2va a2va   4096 May 11 09:58 dirb
-rw-r--rw- 1 a2va a2va      0 May 11 09:57 filea
-rw-r--r-- 1 a2va a2va      0 May 11 10:15 normal1
-rw-rw-r-- 1 a2va proj_a    0 May 11 10:00 proj a
-rw-rw-r-- 1 a2va proj_b    0 May 11 10:00 projb

test_dir/dir proj a:
total 0
-rw-r--r-- 1 a2va a2va   0 May 11 10:15 normal 3
-rw-rw-r-- 1 a2va proj_a 0 May 11 10:01 proj aa

test_dir/dira:
total 0
-rw-r--r-- 1 a2va a2va 0 May 11 10:15 normal2

test_dir/dirb:
total 0
-rw-r--rw- 1 a2va a2va 0 May 11 09:57 fileb
```

