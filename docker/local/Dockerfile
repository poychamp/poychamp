FROM python:3.14.9-slim-trixie

# Node and uv come first: large, and they rarely change.
COPY --from=node:24.22.1-trixie-slim /usr/local/bin/node /usr/local/bin/node
COPY --from=node:24.22.1-trixie-slim /usr/local/lib/node_modules /usr/local/lib/node_modules
RUN ln -s ../lib/node_modules/npm/bin/npm-cli.js /usr/local/bin/npm \
 && ln -s ../lib/node_modules/npm/bin/npx-cli.js /usr/local/bin/npx
COPY --from=ghcr.io/astral-sh/uv:0.13.5 /uv /uvx /usr/local/bin/

# The Python venv lives outside /app so the bind mount can't hide it.
ENV UV_PROJECT_ENVIRONMENT=/opt/venv \
    UV_PYTHON_DOWNLOADS=never \
    UV_LINK_MODE=copy \
    PATH=/opt/venv/bin:$PATH \
    PYTHONDONTWRITEBYTECODE=1 \
    PYTHONUNBUFFERED=1

WORKDIR /app
COPY pyproject.toml uv.lock ./
RUN uv sync --locked --no-install-project

# node_modules stays under /app, where Vite expects it. The "deps" named volume keeps it visible.
COPY package.json package-lock.json .npmrc ./
RUN npm ci --no-audit --no-fund

EXPOSE 8000 5173
CMD ["python", "manage.py", "runserver", "0.0.0.0:8000"]
