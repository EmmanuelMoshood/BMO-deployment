terraform {
  backend "s3" {
    bucket = "bmo-terraform-state-backend-by-emmanuel"
    key = "backend/bmo-deployment.tfstate"
    region = "us-east-1"
    dynamodb_table = "terraform-state-lock"
  }
}