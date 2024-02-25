resource "aws_lb" "frontend_lb" {
  name               = "${var.project_name}-frontend-lb"
  internal           = false
  load_balancer_type = "application"
  security_groups    = [var.web_sg_id]
  subnets            = [var.pub_sub_1a_id,var.pub_sub_2b_id]

}

resource "aws_lb_target_group" "frontendTG" {
  name     = "frontendTG"
  port     = 80
  protocol = "HTTP"
  vpc_id      = var.vpc_id

  health_check {
    enabled             = true
    port                = 80
    protocol            = "HTTP"
    path                = "/"
    matcher             = "200"
    healthy_threshold   = 3
    unhealthy_threshold = 3
  }
}

resource "aws_lb_listener" "frontendListenerA" {
  load_balancer_arn = aws_lb.frontend_lb.arn
  port              = "80"
  protocol          = "HTTP"

  default_action {
    type             = "forward"
    target_group_arn = aws_lb_target_group.frontendTG.arn
  }
}