terraform {
  backend "s3" {
    bucket = "bmo-storage-bucket"
    key = "value"
    region = "us-east-1"
    dynamodb_table = "remote-backend"
  }
}