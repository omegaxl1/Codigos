using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Http;
using Microsoft.AspNetCore.Mvc;
using Microsoft.EntityFrameworkCore;
using Entrega.Datos;
using Entrega.Entidades.Usuarios;
using Entrega.Web.Models.Usuarios.Rol;

namespace Entrega.Web.Controllers
{
    /*[Authorize(Roles = "Administrador")]*/
    [Route("api/[controller]")]
    [ApiController]
    public class RolesController : ControllerBase
    {
        private readonly DbContextEntrega _context;

        public RolesController(DbContextEntrega context)
        {
            _context = context;
        }

        // GET: api/Roles/Listar
        [HttpGet("[action]")]
        public async Task<IEnumerable<RolViewModel>> Listar()
        {
            var rol = await _context.Roles.ToListAsync();

            return rol.Select(r => new RolViewModel
            {
                idrol = r.idrol,
                nombre = r.nombre,
                descripcion = r.descripcion,
                condicion = r.condicion
            });

        }

        // GET: api/Roles/Select
        [HttpGet("[action]")]
        public async Task<IEnumerable<SelectViewModel>> Select()
        {
            var rol = await _context.Roles.Where(r => r.condicion == true).ToListAsync();

            return rol.Select(r => new SelectViewModel
            {
                idrol = r.idrol,
                nombre = r.nombre
            });
        }


        private bool RolExists(int id)
        {
            return _context.Roles.Any(e => e.idrol == id);
        }
    }
}