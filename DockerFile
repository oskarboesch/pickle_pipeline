# Use a lightweight base image
FROM nginx:alpine

# Copy static HTML file to nginx default serving directory
COPY FrontEnd.html /usr/share/nginx/html

# Expose port 80 to allow outside access
EXPOSE 80
