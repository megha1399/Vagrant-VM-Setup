## Vagrant Installation

To download and install vagrant tool, visit https://www.vagrantup.com/downloads.

## Run Locally (GitBash required for Windows host OS)

Clone the project

```bash
  git clone "https://github.com/megha1399/Vagrant-VM-Setup.git"
```

Go to the specific VM directory which you want to bring up. For example, here centos7

```bash
  cd Vagrant-VM-Setup/centos7/
```

To power on VM

```bash
  vagrant up
```

To login to the running VM

```bash
  vagrant ssh
```

To power off VM
```bash
  vagrant halt
```

To destroy VM
```bash
  vagrant destroy
```
