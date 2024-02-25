# WooCommerce Deployment Infrastructure

## Overview:
As a member of the DevOps Engineering team, I have designed and implemented the cloud-based infrastructure to support the deployment of a custom WooCommerce-based product. To make the project more contextual, I have also assumed based on the nature of most WooCommerce applications that the product is most likely not broken up into microservices instead it is most likely an application powered by WooCommerce and using a frontend framework like react. 
The infrastructure will be based on a 3-tier application architecture consisting of web, application, and database tiers. Modern Infrastructure as Code (IaC) technique has been utilized for deployment using Terraform and container technology to deploy the frontend and backend applications have been used. In addition, the deployment is created to be scalable and highly available in multiple availability zones. Seen the architectural diagram for reference. 

## Reference Architecture
![reference architecture](https://github.com/EmmanuelMoshood/BMO-deployment/assets/100259567/f5c6b1ca-27c0-413a-99e0-7a632ee4bbd8)


## Infrastructure Setup
The infrastructure is set up on AWS using the following components:

Virtual Private Cloud (VPC): A logically isolated section of the AWS cloud where the architecture is deployed.
Subnets: Six subnets are created within the VPC to distribute the resources across availability zones for high availability.
Security Groups: Network-level access control to allow specific traffic between the tiers and restrict unauthorized access.

### Component Details
Web Tier:
The web tier consists of EC2 instances running web servers, serving as the front-end layer.
The web servers receive HTTP requests from users and pass them to the application tier for processing.
Application Tier:
The application tier contains EC2 instances running the application server software.
The application servers process requests from the web tier, handle business logic, and interact with the database tier.
Database Tier:
The database tier consists of Amazon RDS, a managed relational database service.
MySQL is used as the database engine.
The database stores and manages the application's data.

### List of services
- Amazon Certificate Manager (SSL)
- Amazon Route 53 (DNS service)
- Amazon CloudFront(CND)
- Amazon EC2 (Server)
- Amazon Auto Scaling group (Scale on demand)
- Amazon VPC (Virtual private cloud: Private Network)
- Amazon RDS (Relational database services: Database)
- Amazon DynamoDB (State-locking for tfstate file)
- Amazon S3 (storing backend and achieving versioning)
- Amazon CloudWatch (Alarm when CPU utilization increase or decreases)

## Scalability and High Availability
To ensure the security of the architecture, the following measures are implemented:
Network Security: Security groups are configured to restrict traffic, allowing only necessary communication between the tiers.
Access Control: IAM roles and policies are used to grant appropriate permissions to EC2 instances and services.

## Implementation Steps: 
### Prerequisite installations on my local machine
- VS Code
- AWS CLI
- Terraform install

### IAM user
- Following the Principle of least privilege I created a user on my AWS account which was used to configure my profile for Terraform to work with.

### Write Terraform files
- Then I began to write the infrastructure using best practices while writing code. Here are some:
  - store state files on remote location


