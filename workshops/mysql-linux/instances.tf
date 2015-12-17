
resource "digitalocean_ssh_key" "default" {
    name = "Apex Mysql Server"
    public_key = "${file("id_rsa.pub")}"
}

resource "digitalocean_droplet" "db" {
    image = "ubuntu-14-04-x64"
    name = "db-${count.index}"
    count = "${var.instance_count}"
    region = "nyc2"
    size = "512mb"
    ssh_keys = ["${digitalocean_ssh_key.default.id}"]
}

output "ips" {
    value = "\n${join("\n", digitalocean_droplet.db.*.ipv4_address)}"
}
