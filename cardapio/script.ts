import { PrismaClient } from '@prisma/client'
import express from 'express'

const prisma = new PrismaClient()
const app = express()

app.use(express.json())

app.get('/', async (req, res) => {
  const produtos = await prisma.produto.findMany()
  res.json(produtos)
})

app.post("/produto", async (req, res) => {
  const {nome,preco} =req.body
  const result = await prisma.produto.create({
    data: { 
      nome,
      preco
     },
  })
  res.json(result)
})


app.listen(3000, () =>
  console.log('REST API server ready at: http://localhost:3000'),
)