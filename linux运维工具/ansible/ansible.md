## ansible
> install
```
apt install ansible
```

> use
```
ansible [group] -m [moduleName] [option]

# example
ansible client -m copy -a "src=/etc/ansible/hosts dest=/etc/ansible/hosts"
```