

# Task 0: Examine the setup of your own account

> What is its principal group ?

The principal has the same name as the account name, which is in my case `a2va`.

> What other groups is the account a member of?

`proj_a` and `proj_b`

> What is the UID of the account and the GID of the principal group?

The UID is `1000` and the GID is `1000`

> Which skeleton files have been copied?

TODO: Dans wsl `etc/skel` est vide

# Task 1: Create user accounts


1.
```sh
getent group jedi rebels
sudo groupadd jedi
sudo groudadd rebels
```

> What option do you need to specify to have `useradd` create a home directory?

There are two ways to do it:
Either use the `-d` flag with the path to the home directory or use the `-m` flag without the path (it will infer the home directory path from the username).

> What is the default login shell for users created with useradd ? What command should we use to change the default login shell from `/bin/sh` to `/bin/bash` ?

The default login shell is `/bin/sh`. To change it to `/bin/bash`, we can use the `chsh` command.

3. Create the following user accounts with default home directories and login
shell
```sh
sudo useradd -s /bin/bash -m -g jedi -G rebels luke
sudo passwd luke
sudo useradd -s /bin/bash -m -g jedi vader
sudo useradd -s /bin/bash -m -g rebels solo
```