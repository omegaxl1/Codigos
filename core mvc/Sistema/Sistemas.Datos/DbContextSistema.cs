using Microsoft.EntityFrameworkCore;
using Sistema.Entidades.Almacen;
using System;
using System.Collections.Generic;
using System.Text;
using static Sistema.Datos.Mapping.Almacen.CategoriaMap;

namespace Sistema.Datos
{
   public class DbContextSistema : DbContext
    {
        public DbSet<Categoria> Categorias { get; set; }
        public DbContextSistema(DbContextOptions<DbContextSistema> options) : base(options)
        {

        }

        protected override void OnModelCreating(ModelBuilder modelBuilder)
        {
            base.OnModelCreating(modelBuilder);
            modelBuilder.ApplyConfiguration ( new CategariaMap() );
        }
    }
}
