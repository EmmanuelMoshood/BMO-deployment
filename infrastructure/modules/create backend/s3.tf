resource "aws_s3_bucket" "bucket" {
    bucket = "bmo-terraform-state-backend-by-emmanuel"
    tags = {
        Name = "S3 Remote Terraform State Store"
    }
}