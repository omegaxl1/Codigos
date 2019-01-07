using Microsoft.EntityFrameworkCore;
using Pizza.Datos.Mapping.Categorias;
using Pizza.Entidades.Categorias;

using static Pizza.Datos.Mapping.Categorias.CategoriaMap;

namespace Pizza.Datos
{
    public class DbContextSistema : DbContext
    {
        public DbSet<Categoria> Categorias { get; set; }
        public DbSet<Inventario> Inventarios { get; set; }
        public DbContextSistema(DbContextOptions<DbContextSistema> options) : base(options)
    {

    }

    protected override void OnModelCreating(ModelBuilder modelBuilder)
    {
        base.OnModelCreating(modelBuilder);
        modelBuilder.ApplyConfiguration(new CategariaMap());
        modelBuilder.ApplyConfiguration(new InventarioMap());
        }
}
}
