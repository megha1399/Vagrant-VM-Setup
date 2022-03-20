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

To power on VM (centos7)

```bash
  vagrant up
```

To login to the running VM

```bash
  vagrant ssh
```

To power off VM (centos7)
```bash
  vagrant halt
```

To destroy VM (centos7)
```bash
  vagrant destroy
```
