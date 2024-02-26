variable "project_name"{}
variable "ami" {
    default = "ami-053b0d53c279acc90"
}
variable "cpu" {
    default = "t2.micro"
}
variable "key_name" {}
variable "user_data" {}
variable "client_sg_id" {}
variable "max_size" {
    default = 6
}
variable "min_size" {
    default = 2
}
variable "desired_cap" {
    default = 3
}
variable "asg_health_check_type" {
    default = "ELB"
}
variable "subsetA_id" {}
variable "subsetB_id" {}
variable "tg_arn" {}