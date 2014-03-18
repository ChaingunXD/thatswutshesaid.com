Vagrant.configure("2") do |config|
  config.vm.box = "precise32"
  config.vm.box_url = "http://files.vagrantup.com/precise32.box"

  config.vm.network :private_network, ip: "192.168.90.101"
  config.ssh.forward_agent = true
  config.vm.hostname = "twss"

  config.vm.provider :virtualbox do |v|
    v.customize ["modifyvm", :id, "--natdnshostresolver1", "on"]
    v.customize ["modifyvm", :id, "--memory", 256]
    v.customize ["modifyvm", :id, "--name", "twss"]
  end

  config.vm.synced_folder "./", "/var/www"

  config.vm.provision :shell, :inline => "sh /var/www/vagrant/setup.sh"
end
