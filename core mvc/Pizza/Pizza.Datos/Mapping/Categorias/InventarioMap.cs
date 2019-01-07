using Microsoft.EntityFrameworkCore;
using Microsoft.EntityFrameworkCore.Metadata.Builders;
using Pizza.Entidades.Categorias;
using System;
using System.Collections.Generic;
using System.Text;

namespace Pizza.Datos.Mapping.Categorias
{
    public class InventarioMap : IEntityTypeConfiguration<Inventario>
    {
        public void Configure(EntityTypeBuilder<Inventario> builder)
        {
            builder.ToTable("inventario").HasKey(i => i.idingrediente);
        }
    }
}
