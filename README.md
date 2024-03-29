# WooCommerce Deployment Infrastructure

## Overview:
As a member of the DevOps Engineering team, I have designed and implemented the cloud-based infrastructure to support the deployment of a custom WooCommerce-based product. To make the project more contextual, I have also assumed based on the nature of most WooCommerce applications that the product is most likely not broken up into microservices instead it is most likely an application powered by WooCommerce and using a frontend framework like react. 
The infrastructure will be based on a 3-tier application architecture consisting of web, application, and database tiers. Modern Infrastructure as Code (IaC) technique has been utilized for deployment using Terraform and container technology to deploy the frontend and backend applications have been used. In addition, the deployment is created to be scalable and highly available in multiple availability zones. Seen the architectural diagram for reference. 

## Reference Architecture
![reference architecture](https://github.com/EmmanuelMoshood/BMO-deployment/assets/100259567/9f122f13-ccc4-409e-99f4-b547c17b74e1)



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

## Implementation 
### Prerequisite installations on my local machine
- VS Code
- AWS CLI
- Terraform install

### IAM user
- Following the Principle of least privilege I created a user on my AWS account which was used to configure my profile for Terraform to work with.

### Write Terraform files
- Then I began to write the infrastructure using best practices while writing code. Here are some:
  - store state files on remote location
  - using state-locking to keep tfstate file consistent while working on a collaborative project using DynamoDB
  - using Terraform modules to encapsulate and abstract complex infrastructure components.
  - using terraform validate and terraform fmt commands to validate and format your Terraform code.


Remote Backend
![s3-backend](https://github.com/EmmanuelMoshood/BMO-deployment/assets/100259567/61415695-72ca-45ac-b51c-c9411758b9e1)


State locking with DynamoDB
![dynamo-statelocking](https://github.com/EmmanuelMoshood/BMO-deployment/assets/100259567/f9bf2a9b-97b4-4107-8973-99408fa9be8f)


## Outputs

test WooCommerce app
![04-wordpress-ready](https://github.com/EmmanuelMoshood/BMO-deployment/assets/100259567/7b8e0172-003e-460f-93a5-2a74359cfb9d)

vpc and subnets 
![created-subnets](https://github.com/EmmanuelMoshood/BMO-deployment/assets/100259567/0a57b515-9b33-45c9-9fa6-9a4a2372e56e)

Routing table
![route_table](https://github.com/EmmanuelMoshood/mosh-devops-notes/assets/100259567/e126d59c-afcc-459d-bd6b-58e5ad261774)

NAT-gateway
![launched-nat-gatewway](https://github.com/EmmanuelMoshood/mosh-devops-notes/assets/100259567/0a1cbd39-7d2c-4804-b21f-cb5f52cd12f3)


Internet-gateway
![created-igw](https://github.com/EmmanuelMoshood/mosh-devops-notes/assets/100259567/ec73f183-799c-420b-830e-f68869159b5e)

security groups
![launched-security-group](https://github.com/EmmanuelMoshood/mosh-devops-notes/assets/100259567/26c7a36a-d005-4918-9558-b029262abdd2)

launch template
![launch-templates](https://github.com/EmmanuelMoshood/mosh-devops-notes/assets/100259567/dc590151-17af-48ed-b76c-59ea9ea81492)


auto-scaling group
![autoscaling-group](https://github.com/EmmanuelMoshood/mosh-devops-notes/assets/100259567/42245287-e6aa-4d5d-987a-d87a0a79047c)


EC2 servers 
![launched-ec2-servers](https://github.com/EmmanuelMoshood/mosh-devops-notes/assets/100259567/a93923fd-dd47-4c91-9b02-9a75fe2631fc)


Target group
![target-groups](https://github.com/EmmanuelMoshood/mosh-devops-notes/assets/100259567/de370da4-341c-486f-9e7e-6956cd040a9a)


Application load balancer
![load-balancer](https://github.com/EmmanuelMoshood/mosh-devops-notes/assets/100259567/57a7e1e2-7f3e-4ced-a2b2-32f1df84e880)

