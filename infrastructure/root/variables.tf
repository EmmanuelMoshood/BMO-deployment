variable "project_name" {
    description = "This is a candidate test from BMO"
}

variable "region" {
    description = "region based on assumed location of end users"
}

variable "vpc_cidr" {}      
variable pub_sub_1a_cidr {}
variable pub_sub_2b_cidr {}
variable pri_sub_3a_cidr {}
variable pri_sub_4b_cidr {}
variable pri_sub_5a_cidr {}
variable pri_sub_6b_cidr {}
variable db_username {}
# variable "user_data_frontend" {}  
# variable "user_data_backend" {}  
variable certificate_domain_name {}
variable additional_domain_name {}